from sklearn.model_selection import train_test_split
import pandas as pd
from sklearn.preprocessing import StandardScaler
from sklearn.decomposition import PCA
from training.models.logistic_regression_pipeline import *
from src.evaluation_methods import *
from imblearn.under_sampling import RandomUnderSampler

if __name__ == '__main__':
    df = pd.read_excel('../../data_base/excel/datasetV2.xlsx', sheet_name='Casos Dengue')

    x, y = df.iloc[:, :-1].values, df.iloc[:, -1:].values
    x_train, x_test, y_train, y_test = train_test_split(x, y, test_size=0.3, random_state=0, stratify=y)

    under_sampler = RandomUnderSampler()
    x_train, y_train = under_sampler.fit_resample(x_train, y_train)

    #print("Distribution before resampling {}".format(y_train.shape))

    standar_scaler = StandardScaler()
    dimension_reduction = PCA(n_components=2)
    # 78.7 -> lbfgs
    model = LogisticRegression(random_state=1, solver='newton-cg', class_weight="balanced",multi_class="multinomial")

    model = makePipeLineModel(standar_scaler, dimension_reduction, model)
    model = fit(model, x_train, y_train)
    y_predict = predict(model, x_test)
    print('Test Accuracy: %.3f' % score(model, x_test, y_test))
    confusionMatrix(y_test, y_predict)
